class AddDevicesNotifications < ActiveRecord::Migration[5.0]
  def change
    create_table :devices_notifications, id: false do |t|
      t.references :device
      t.references :notification
    end
  end
end
