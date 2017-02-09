class AddDeletedAtToModels < ActiveRecord::Migration[5.0]
  def change
    change_table :users do |t|
      t.datetime :deleted_at, index: true
    end
    change_table :items do |t|
      t.datetime :deleted_at, index: true
    end

    change_table :categories do |t|
      t.datetime :deleted_at, index: true
    end

    change_table :purchases do |t|
      t.datetime :deleted_at, index: true
    end

    change_table :reviews do |t|
      t.datetime :deleted_at, index: true
    end

    change_table :transfer_requests do |t|
      t.datetime :deleted_at, index: true
    end

    change_table :comments do |t|
      t.datetime :deleted_at, index: true
    end
  end
end
