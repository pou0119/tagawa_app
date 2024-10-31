class CreateReservations < ActiveRecord::Migration[7.0]
  def change
    create_table :reservations do |t|
      t.string :name
      t.date :date
      t.time :checkin_time
      t.integer :number
      t.integer :accommodation
      t.integer :price

      t.timestamps
    end
  end
end
