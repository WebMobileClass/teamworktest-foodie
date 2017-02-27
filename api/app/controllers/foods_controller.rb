class FoodsController < ApplicationController
  def index
  	@foods = Food.order('namE ASC')

  	render json: @foods
  end
end
