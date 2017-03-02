class FoodsController < ApplicationController

  def index
  	@foods = Food.all

  	render json: @foods
  end

  def create
  	@new_food = Food.create(newFoodParams)
  	if @new_food.save!
  		render json: {"message": "Resource Created"}, status: :created
  	else
  		render json: @new_food.errors.messages, status: :unprocessable_entity
  	end
  end

  def drinks
  	@drinks = Food.where(food_type: "drink").order("name ASC")
  	render json: @drinks
  end

  def meals
  	@meals = Food.where(food_type: "meal").order("name ASC")
  	render json: @meals
  end

  private
  def newFoodParams
  	params.require(:food).permit(:name, :food_type, :price, :vendor_name)
  end

end
