class CreateFoods < ActiveRecord::Migration[5.0]
  def change
    create_table :foods do |t|
      t.text :image_url
      t.string :name
      t.integer :price
      t.integer :quantity

      t.timestamps
    end
  end
end
