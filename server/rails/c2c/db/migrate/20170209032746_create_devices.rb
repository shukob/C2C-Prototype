class CreateDevices < ActiveRecord::Migration[5.0]
  def change
    create_table :devices do |t|
      t.string :os, null: false
      t.string :token, null: false
      t.string :identifier
      t.string :model
      t.references :user, foreign_key: true, null: false
      t.datetime :deleted_at

      t.timestamps
    end
  end
end
