def get_person_info():
    name = "Alice"
    age = 30
    city = "New York"
    return name, age, city  # Returning multiple values as a tuple

# Calling the function and unpacking the returned values
person_name, person_age, person_city = get_person_info()

print("Name:", person_name)
print("Age:", person_age)
print("City:", person_city)
