class Order < ApplicationRecord
	belongs_to :customer
	belongs_to :food

	validates :customer_id, :food_id, :quantity, :total presence: true
	add_foreign_key: :orders :customers
	add_foreign_key: :orders :foods
end
