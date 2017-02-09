class Comment < ApplicationRecord
  belongs_to :item
  belongs_to :from_user, class_name: User
  belongs_to :to_user, class_name: User

  validates :from_user, presence: true
  validates :item, presence: true

  acts_as_paranoid
end
