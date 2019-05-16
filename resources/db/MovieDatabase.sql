SELECT M.Title, G.genre, CONCAT(A.FIRSTName, ' ', A.LastName) AS ActorFullName, CONCAT (D.FirstName, ' ', D.LastName) AS DirectorFullName,  PR.PegiName FROM movie M
JOIN movieactors MA ON MA.MovieID = M.MovieID
JOIN moviedirectors MD ON MD.MovieID = M.MovieID
JOIN actor A ON A.ActorID = MA.ActorID
JOIN director D ON D.DirectorID = MD.DirectorID
JOIN moviepegi MP ON MP.MovieID = M.MovieID
JOIN pegirating PR ON PR.PegiID = MP.PegiID
JOIN moviegenre MR on MR.MovieID = M.MovieID
JOIN genre G ON G.GenreID = MR.GenreID