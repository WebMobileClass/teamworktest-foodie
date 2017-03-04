class CreateFoods < ActiveRecord::Migration[5.0]
  def change
    create_table :foods do |t|
      t.string :name, null: false
      t.string :food_type, null: false
      t.integer :price, null: false
      t.string :vendor_name, null: false

      t.timestamps
    end
  end
end
