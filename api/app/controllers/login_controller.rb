class LoginController < ApplicationController
	def create
		#loginParams is meant to collect data from users then perform check
		@email = params[:email]
		@password = params[:password]

		@queryParams = Register.where("email = ? AND password = ?", @email, @password)
		render json: @queryParams
	end

	private 
	def loginParams
		params.require(:register).permit(:username, :first_name, :last_name, :email, :address, :phone_number)
	end
end
