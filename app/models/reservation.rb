class Reservation < ApplicationRecord
    validates :number, numericality: { greater_than_or_equal_to: 1 }
    validates :accommodation, numericality: { greater_than_or_equal_to: 1 }
  end