class ApplicationController < ActionController::Base

  before_action :authenticate_user!
  acts_as_token_authentication_handler_for User
  acts_as_token_authentication_handler_for Admin

  protect_from_forgery with: :exception
end
