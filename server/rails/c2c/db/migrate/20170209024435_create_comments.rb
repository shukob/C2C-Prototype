class CreateComments < ActiveRecord::Migration[5.0]
  def change
    create_table :comments do |t|
      t.references :item, foreign_key: true, null: false
      t.references :from_user, index: true, foreign_key: {to_table: :users}, null: false
      t.references :to_user, index: true, foreign_key: {to_table: :users}

      t.timestamps
    end
  end
end
