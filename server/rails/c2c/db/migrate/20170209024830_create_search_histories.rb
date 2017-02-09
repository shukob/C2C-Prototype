class CreateSearchHistories < ActiveRecord::Migration[5.0]
  def change
    create_table :search_histories do |t|
      t.references :user, foreign_key: true, null: false
      t.string :keyword, null: false
      t.references :category, foreign_key: true

      t.timestamps
    end
  end
end
