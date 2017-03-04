class CreateOrders < ActiveRecord::Migration[5.0]
  def change
    create_table :orders do |t|
      t.integer :customer_id, null: false
      t.references :food_id, null: false
      t.integer :quantity, null: false
      t.integer :total, null: false
      t.timestamps
    end
  end
end
