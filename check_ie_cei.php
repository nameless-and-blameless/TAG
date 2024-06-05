def check_ie_cei(text):
  """
  This function checks a string for the occurrences of "I" before "E" except after "C".

  Args:
      text: The string to be checked.

  Returns:
      A list containing all positions where the "I before E except after C" rule applies.
  """
  positions = []
  for i in range(2, len(text)):
    if text[i] == 'e' and text[i-1] == 'i' and text[i-2] != 'c':
      positions.append(i-1)
  return positions

# Example usage
text = "believe science, receive life"
valid_positions = check_ie_cei(text)

if valid_positions:
  print(f'Found "I before E except after C" at positions: {valid_positions}')
else:
  print('No "I before E except after C" found in the text.')
