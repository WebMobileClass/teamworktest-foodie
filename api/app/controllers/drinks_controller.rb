class DrinksController < ApplicationController
  def index
  	@drinks = Drink.order('name ASC')

  	render json: @drinks
  end
end
