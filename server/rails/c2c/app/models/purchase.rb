class Purchase < ApplicationRecord
  belongs_to :item
  belongs_to :user

  acts_as_paranoid

  after_create :notify_item_owner

  scope :for, ->(item) { where(item: item) }

  def notify_item_owner
    Notification.create! devices: item.owner.devices, title: I18n.t('message.item_purchased'), source: self
  rescue => e
    #TODO: handle notification error
  end
end
