# 1) Creating an empty list
empty_list = []
print("Empty list:", empty_list)

# 2) Creating a list with elements
fruits = ["apple", "banana", "cherry"]
print("List with elements:", fruits)

# 3) Using the list() constructor with an iterable (like a string)
letters = list("hello")
print("List from string using list():", letters)

# 4) Using list() with a tuple
numbers_tuple = (1, 2, 3, 4)
numbers_list = list(numbers_tuple)
print("List from tuple using list():", numbers_list)

# 5) Using list comprehension to create a list
squares = [x**2 for x in range(6)]
print("List created with list comprehension:", squares)

# 6) Creating a list by repeating elements
repeated_list = [0] * 5
print("List with repeated elements:", repeated_list)

# 7) Creating a list from user input (comma-separated values)
user_input = "red,green,blue"
colors = user_input.split(",")
print("List created from a string split:", colors)
