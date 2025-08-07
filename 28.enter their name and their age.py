from datetime import datetime

# Get current year
current_year = datetime.now().year

# Ask user for input
name = input("Enter your name: ")
age = int(input("Enter your age: "))

# Calculate the year they will turn 60
years_to_60 = 60 - age
year_turn_60 = current_year + years_to_60

# Print the message
print(f"Hello, {name}! You will turn 60 years old in the year {year_turn_60}.")
