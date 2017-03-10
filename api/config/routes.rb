Rails.application.routes.draw do
  
  resources :foods, :register, :orders, :login

  get 'drinks', to: 'foods#drinks'
  get 'meals', to: 'foods#meals'
  post '/login', to: 'login#create'
  get '/order/:id', to: 'orders#show'
  post 'authenticate', to: 'authenticatio#authenticate'

  # For details on the DSL available within this file, see http://guides.rubyonrails.org/routing.html
end
