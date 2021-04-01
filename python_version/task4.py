import data3

def recursive(team, allPeople, l):
  if team.is_team and l < 3:
    for k in range(len(team.members)):
      item = team.members[k]
      recursive(item, allPeople, l + 1)
  else:
    allPeople.append(team)

def get_members(team):
  allPeople = []
  l = 0
  recursive(team, allPeople, l)
  allPeople.pop()
  return allPeople

print(sorted(p.displayname for p in get_members(data3.c_team)))