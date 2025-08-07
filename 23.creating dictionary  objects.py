# 1) Creating an empty dictionary
empty_dict = {}
print("Empty dictionary:", empty_dict)

# 2) Creating a dictionary with key-value pairs
person = {"name": "Alice", "age": 25, "city": "New York"}
print("Dictionary with elements:", person)

# 3) Using the dict() constructor with keyword arguments
person2 = dict(name="Bob", age=30, city="Los Angeles")
print("Dictionary using dict() with keywords:", person2)

# 4) Using the dict() constructor with a list of tuples (key-value pairs)
person3 = dict([("name", "Charlie"), ("age", 35), ("city", "Chicago")])
print("Dictionary from list of tuples:", person3)

# 5) Using dict comprehension
squares = {x: x**2 for x in range(1, 6)}
print("Dictionary created with comprehension:", squares)

# 6) Creating a dictionary from two lists using zip()
keys = ["id", "name", "role"]
values = [101, "David", "Developer"]
person4 = dict(zip(keys, values))
print("Dictionary from two lists using zip():", person4)
