class CreateOrders < ActiveRecord::Migration[5.0]
  def change
    create_table :orders do |t|
      t.integer :customer_id, null: false
      t.integer :food_id, null: false
      t.integer :quantity, null: false
      t.decimal :total, null: false, precision: 5, scale: 2
      
      t.timestamps
    end
  end
end
