# This file should contain all the record creation needed to seed the database with its default values.
# The data can then be loaded with the rails db:seed command (or created alongside the database with db:setup).
#
# Examples:
#
#   movies = Movie.create([{ name: 'Star Wars' }, { name: 'Lord of the Rings' }])
#   Character.create(name: 'Luke', movie: movies.first)

order = Order.create([{
	customer_id: 1,
	food_id: 1,
	total: 1800,
	quantity: 3
},
	customer_id: 1,
	food_id: 2,
	total: 700,
	quantity: 2
])
