class Device < ApplicationRecord
  belongs_to :user
  has_and_belongs_to_many :notifications

  validates :user, presence: true
  validates :os, presence: true
  validates :token, presence: true

end
