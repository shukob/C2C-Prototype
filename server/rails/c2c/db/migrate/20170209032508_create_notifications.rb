class CreateNotifications < ActiveRecord::Migration[5.0]
  def change
    create_table :notifications do |t|
      t.string :title
      t.references :source, polymorphic: true
      t.timestamps
    end
  end
end
