class OrdersController < ApplicationController
	def create
		@order = Order.create(order_params)

		#@price 


		if @order.save
			render status: :created
		else
			render json @order.errors, status: :unprocessable_entity
		end

		private
		def order_params
			params.require(:order).permit(:customer_id, :food_id, :quantity, :total)
		end
	end
end
