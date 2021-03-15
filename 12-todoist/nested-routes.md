# Nästlade routes

## Före

```plain
/artists        # Visar lista över alla artister
/artists/8      # Visar info om artisten med ID 8

/albums         # Visar lista över alla album
/albums/42      # Visar info om albumet med ID 42
/albums/create  # Visar formulär för att skapa nytt album

Album::create(['title' => 'Bed of Roses', 'artist_id' => 8]);
```

## Efter

```plain
/artists                    # Visar lista över alla artister
/artists/8                  # Visar info om artisten med ID 8
/artists/8/albums           # Visar alla album från artisten med ID 8
/artists/8/albums/42        # Visar info om albumet med ID 42 från artisten med ID 8

/artists/8/albums/create    # Visar formulär för att skapa nytt album för artisten med ID 8

Artist::find(8)->albums()->create(['title' => 'Bed of Roses'])
```
