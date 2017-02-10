class Review < ApplicationRecord
  belongs_to :purchase
  has_many :notifications, as: :source

  acts_as_paranoid
end
