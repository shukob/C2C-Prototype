class Notification < ApplicationRecord
  belongs_to :source, polymorphic: true
  has_and_belongs_to_many :devices


  after_create :notify_once

  def notify_once
    devices.each do |device|
      case device.os
        when 'iOS'
          notify_ios device
        when 'Android'
          notify_android device
      end

    end

  end

  def notify_ios(device)
    n = Rpush::Apns::Notification.new
    n.app = Rpush::Apns::App.find_or_create_by(name: "ios_app") do |app|
      app.certificate = ''
      app.environment = Rails.env.development? ? 'development' : 'production'
      app.password = 'password'
      app.connections = 1
      app.save!
      app
    end
    n.device_token = device.token
    n.alert = self.title
    n.data = {}
    n.save!
  end

  def notify_android(device)
    n = Rpush::Gcm::Notification.new
    n.app = Rpush::Gcm::App.find_or_create_by(name: "android_app") do |app|
      app.auth_key = "..."
      app.connections = 1
      app.save!
      app
    end
    n.registration_ids = [device.token]
    n.data = { message: self.title }
    n.priority = 'high'        # Optional, can be either 'normal' or 'high'
    n.content_available = true # Optional
    n.notification = { body: 'great match!',
                       title: 'Portugal vs. Denmark',
                       icon: 'myicon'
    }
    n.save!
  end

end
