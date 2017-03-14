class OrdersController < ApplicationController
	#include ActiveModel::Conversion
  	#attr_accessor :total
  	def index
  		@orders = Order.all
  		render json: @orders, status: :ok
  	end

	def create
		customer_id = params[:customer_id]
		food_id = params[:food_id]
		quantity = params[:quantity]

		food_price = Food.find_by_id(food_id)
		price = food_price.price
		total = quantity * price

		@order = Order.create(customer_id: customer_id, food_id: food_id, quantity: quantity, total: total)

		if @order.save
			render status: :created                   
		else
			render json: @order.errors, status: :unprocessable_entity
		end
	end

	def show
		order_id = params[:id]
		@orders = Food.joins(:orders).where( orders: { id: order_id})
		render json: @orders
		#.where(orders: { created_at: time_range })
		
	end

	private
	def order_params
		params.require(:order).permit(:customer_id, :food_id, :quantity, :total)
	end
end
