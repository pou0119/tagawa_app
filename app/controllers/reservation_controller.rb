class ReservationController < ApplicationController
  def new
    @reservation_user = Reservation.new
    
  end
end
