class CreateReviews < ActiveRecord::Migration[5.0]
  def change
    create_table :reviews do |t|
      t.references :purchase, foreign_key: true, null: false
      t.integer :value, null: false
      t.text :comment, null: false

      t.timestamps
    end
  end
end
