# Python program to demonstrate type conversion functions

# Converting float to int
float_num = 9.78
int_num = int(float_num)
print(f"Float {float_num} converted to int is {int_num}")

# Converting int to float
int_num2 = 5
float_num2 = float(int_num2)
print(f"Int {int_num2} converted to float is {float_num2}")

# Converting int to string
int_num3 = 123
str_num = str(int_num3)
print(f"Int {int_num3} converted to string is '{str_num}'")

# Converting string to int
str_val = "456"
int_val = int(str_val)
print(f"String '{str_val}' converted to int is {int_val}")

# Converting string to float
str_val2 = "3.1415"
float_val2 = float(str_val2)
print(f"String '{str_val2}' converted to float is {float_val2}")

# Converting int to boolean
int_bool = 0
bool_val = bool(int_bool)
print(f"Int {int_bool} converted to boolean is {bool_val}")

# Converting string to complex number
str_complex = "2+3j"
complex_num = complex(str_complex)
print(f"String '{str_complex}' converted to complex is {complex_num}")
