import data2

def get_members(team):
  allPeople = []
  for i in range(len(team.members)):
    item = team.members[i]
    if item.is_team:
      for j in range(len(item.members)):
        item2 = item.members[j]
        allPeople.append(item2)
        pass
    else:
      allPeople.append(item)
  return allPeople

print(sorted(p.displayname for p in get_members(data2.c_team)))