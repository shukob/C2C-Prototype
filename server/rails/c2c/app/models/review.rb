class Review < ApplicationRecord
  belongs_to :purchase

  acts_as_paranoid
end
