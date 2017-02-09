class Item < ApplicationRecord
  belongs_to :owner, class_name: User
  belongs_to :category

  validates :category, presence: true
  validates :owner, presence: true

  scope :of, ->(user) { where(owner: user) }

  acts_as_paranoid
end
