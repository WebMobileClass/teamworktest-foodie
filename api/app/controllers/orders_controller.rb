class OrdersController < ApplicationController
	#include ActiveModel::Conversion
  	#attr_accessor :total
  	def index
  		@orders = Order.all
  		render json: @orders, status: :ok
  	end
	def create
		price = params[:price]
		quantity = params[:quantity]
		params[:total]= price.to_i * quantity.to_i

		@order = Order.create(order_params)

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
