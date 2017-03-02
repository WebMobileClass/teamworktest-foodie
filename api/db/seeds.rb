# This file should contain all the record creation needed to seed the database with its default values.
# The data can then be loaded with the rails db:seed command (or created alongside the database with db:setup).
#
# Examples:
#
#   movies = Movie.create([{ name: 'Star Wars' }, { name: 'Lord of the Rings' }])
#   Character.create(name: 'Luke', movie: movies.first)

foods = Food.create([
	{
		name: 'Amala', type: 'meal', price: '600.00', vendor_name: 'Fzba'
	},
	{
		name: 'Chivita', type: 'drink', price: '500.00', vendor_name: 'Fzba'
	},
	{
		name: 'Fufu', type: 'meal', price: '600.00', vendor_name: 'Bashan'
	},
	{
		name: 'Ice Tea', type: 'drink', price: '300.00', vendor_name: 'Bashan'
	},
	{
		name: 'Holandia', type: 'drink', price: '300.00', vendor_name: 'Fzba'
	},
	{
		name: 'Wheat', type: 'meal', price: '300.00', vendor_name: 'Bashan'
	},
	{
		name: 'Spaghetti', type: 'meal', price: '300.00', vendor_name: 'Bashan'
	}
])
