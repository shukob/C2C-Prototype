class CreateItems < ActiveRecord::Migration[5.0]
  def change
    create_table :items do |t|
      t.references :owner, index: true, foreign_key: {to_table: :users}
      t.string :name, null: false
      t.integer :price, null: false, default: 0
      t.references :category, foreign_key: true

      t.timestamps
    end
  end
end
