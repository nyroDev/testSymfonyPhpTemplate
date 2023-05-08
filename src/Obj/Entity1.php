<?php

namespace App\Obj;

class Entity1
{
    protected ?string $name = null;
    protected ?string $email = null;
    protected ?array $tags = [];

    public function __construct(string $name, string $email, array $tags)
    {
        $this->name = $name;
        $this->email = $email;
        $this->tags = $tags;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getTags(): array
    {
        return $this->tags;
    }

    public function setTags(array $tags): self
    {
        $this->tags = $tags;

        return $this;
    }

    public function __toString()
    {
        return $this->getName();
    }
}
