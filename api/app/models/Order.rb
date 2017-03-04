class Order < ApplicationRecord
	belongs_to :food

	validates :customer_id, :food_id, :quantity, :total, presence: true
end
