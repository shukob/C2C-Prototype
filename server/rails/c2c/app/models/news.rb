class News < ApplicationRecord
  has_one :notification, as: :source
end
