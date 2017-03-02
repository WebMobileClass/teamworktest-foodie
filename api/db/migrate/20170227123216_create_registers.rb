class CreateRegisters < ActiveRecord::Migration[5.0]
  def change
    create_table :registers do |t|

      t.string :username, null: false
      t.string :first_name, null: false
      t.string :last_name, null: false
      t.string :email, null: false, unique: true
      t.text :address, null: false
      t.string :phone_number, null: false
      t.string :password, null: false
      #length: {maximum: 32}
      t.timestamps
    end
  end
end
