# This file should contain all the record creation needed to seed the database with its default values.
# The data can then be loaded with the rails db:seed command (or created alongside the database with db:setup).
#
# Examples:
#
#   movies = Movie.create([{ name: 'Star Wars' }, { name: 'Lord of the Rings' }])
#   Character.create(name: 'Luke', movie: movies.first)

foods = Food.create([
	{
		image_url: './', name: 'Amala', price: '600.00', quantity: '4'
	},
	{
		image_url: './', name: 'Rice', price: '500.00', quantity: '1'
	},
	{
		image_url: './', name: 'Fufu', price: '600.00', quantity: '4'
	},
	{
		image_url: './', name: 'Semo', price: '450.00', quantity: '3'
	},
	{
		image_url: './', name: 'Beans', price: '300.00', quantity: '1'
	},
	{
		image_url: './', name: 'Wheat', price: '300.00', quantity: '2'
	},
	{
		image_url: './', name: 'Spaghetti', price: '300.00', quantity: '1'
	}
])

drinks = Drink.create([
	{
		image_url: './', name: 'Five Alive', price: '600.00', quantity: '1'
	},
	{
		image_url: './', name: 'Ribenna', price: '500.00', quantity: '1'
	},
	{
		image_url: './', name: 'Chivita', price: '600.00', quantity: '1'
	},
	{
		image_url: './', name: 'Graty', price: '450.00', quantity: '3'
	},
	{
		image_url: './', name: 'Hollianda', price: '300.00', quantity: '1'
	},
	{
		image_url: './', name: 'Ice Tea', price: '300.00', quantity: '1'
	}
])