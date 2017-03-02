class LoginController < ApplicationController
	def login
		#loginParams is meant to collect data from users then perform check
		@email = params[:email]
		@password = params[:password]

		@loginParams = Register.where("email = ? AND password = ?", @email, @password)

		if @loginParams
			render json: {"message": "Login Successful"}
		else
			render json: @loginParams.errors, status: :unprocessable_entity
		end
	end
end
