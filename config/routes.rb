Rails.application.routes.draw do
  get 'reservation/new'
  root "static_pages#home"
  resources :reservation
end
