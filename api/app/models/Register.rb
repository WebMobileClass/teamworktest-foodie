class Register < ApplicationRecord

	validates :username, :first_name, :last_name, :email, :address, :password, :phone_number, presence: true

	before_create :downcase_params, on: :create

#todo: implement to lowercase...
	protected
	def downcase_params
		self.username = username.downcase.titleize
		self.first_name = first_name.downcase.titleize
		self.last_name = last_name.downcase.titleize
		self.email = email.downcase.titleize
		self.address = address.downcase.titleize
		self.phone_number = phone_number
		self.password = password
		
	end
end
