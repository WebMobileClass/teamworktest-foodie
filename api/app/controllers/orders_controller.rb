class OrdersController < ApplicationController
	#include ActiveModel::Conversion
  	#attr_accessor :total
	def create
		price = params[:price]
		quantity = params[:quantity]
		totalPrice  price * quantity 
		
		params[:total] = totalPrice

		@order = Order.create(order_params)

		if @order.save
			render status: :created
		else
			render json: @order.errors, status: :unprocessable_entity
		end
	end

	def show
		@orders = Food.joins(:orders)
		render json: @orders
		#.where(orders: { created_at: time_range })
		
	end

	private
	def order_params
		params.require(:order).permit(:customer_id, :food_id, :quantity, :total)
	end
end
