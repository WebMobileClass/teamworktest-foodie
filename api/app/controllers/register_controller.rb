class RegisterController < ApplicationController
	
	def index
		@customers = Register.all
		render json: @customers
	end
	
	def create
		if params[:password] == params[:confirm_password]
			@newCustomer = Register.create(newCustomerParams)
			#todo: handle exceptions of same record using---> new_record?	
			if @newCustomer.save!
				render json:{"message": "Resource created"}, status: :created
			else 
				render json: @newCustomer.errors.messages, status: :unprocessable_entity
			end
		else
			render json:{"message": "Could not register"}
		end
	end 

	private
	def newCustomerParams
		params.require(:register).permit(:username, :first_name, :last_name, :email, :address, :phone_number, :password)
	end
end

