class CreateTransferRequests < ActiveRecord::Migration[5.0]
  def change
    create_table :transfer_requests do |t|
      t.references :purchase, foreign_key: true, null: false

      t.timestamps
    end
  end
end
