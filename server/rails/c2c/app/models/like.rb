class Like < ApplicationRecord
  belongs_to :user
  belongs_to :item
  has_many :notifications, as: :source

  validates :user, presence: true
  validates :item, presence: true

end
